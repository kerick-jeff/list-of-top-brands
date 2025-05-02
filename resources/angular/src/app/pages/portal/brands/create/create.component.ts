import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Router } from '@angular/router';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { BrandService } from '../../../../services/brand.service';
import { CountryService } from '../../../../services/country.service';
import { NavigatorComponent } from '../../../../components/layout/portal/navigator/navigator.component';
import { Country } from '../../../../models/country.model';
import { Brand } from '../../../../models/brand.model';
import { ImageComponent } from '../../../../components/image/image.component';

@Component({
  selector: 'page-portal-brand-create',
  imports: [
    CommonModule,
    RouterModule,
    ReactiveFormsModule,
    NavigatorComponent,
    ImageComponent
  ],
  templateUrl: './create.component.html',
  styleUrl: './create.component.css'
})
export class CreateComponent implements OnInit {
  brandForm!: FormGroup;
  countries: Country[] = [];
  loading: boolean = false;
  submitting: boolean = false;
  previewImage: string | null = null;
  errors: any = {};

  constructor(
    private fb: FormBuilder,
    private brandService: BrandService,
    private countryService: CountryService,
    private router: Router
  ) {}

  ngOnInit(): void {
    this.initForm();
    this.loadCountries();
  }

  /**
   * Initialize the form with default values and validators.
   * - Auto-generate slug from name.
   */
  initForm(): void {
    this.brandForm = this.fb.group({
      name: ['', [Validators.required]],
      country: ['', [Validators.required]],
      caption: [''],
      description: [''],
      website: ['', [Validators.pattern('https?://.+')]],
      slug: ['', [Validators.required, Validators.pattern('^[a-z0-9-]+$')]],
      rating: [4.0, [Validators.min(0), Validators.max(5)]],
      default: [false, [Validators.required]],
      image: [null]
    });

    // Auto-generate slug from name
    this.brandForm.get('name')?.valueChanges.subscribe(name => {
      if (name && !this.brandForm.get('slug')?.dirty) {
        const slug = name.toLowerCase()
          .replace(/\s+/g, '-')
          .replace(/[^a-z0-9-]/g, '')
          .replace(/-+/g, '-');
        this.brandForm.get('slug')?.setValue(slug);
      }
    });
  }

  loadCountries(): void {
    this.countryService.getCountries().subscribe(countries => {
      this.countries = countries;
    });
  }

  /**
   * Handle image selection and preview.
   * - Validates the image type.
   * - Reads the image file and sets it as a preview.
   * - Updates the form with the selected image.
   *
   * @param event The change event from the file input.
   */
  onImageSelected(event: Event): void {
    const file = (event.target as HTMLInputElement).files?.[0];

    if (file) {
      if (this.isValidImageType(file)) {
        const reader = new FileReader();

        reader.onload = (e) => {
          this.previewImage = e.target?.result as string;
          this.brandForm.patchValue({ image: this.previewImage });
        };

        reader.readAsDataURL(file);
      } else {
        this.errors.image = ['Please select a valid image file (jpg, jpeg, png, bmp, gif, or webp)'];
        (event.target as HTMLInputElement).value = '';
      }
    }
  }

  isValidImageType(file: File): boolean {
    const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/bmp', 'image/gif', 'image/webp'];
    return validTypes.includes(file.type);
  }

  /**
   * Handle form submission.
   * - Validates the form.
   * - Submits the form data to the server.
   * - Handles errors and resets the submitting state.
   */
  onSubmit(): void {
    if (this.brandForm.invalid) return;

    this.errors = {};
    this.submitting = true;
    const brandData: Brand = this.brandForm.value;

    this.brandService.store(brandData).then(() => {
      this.router.navigate(['/portal/brands']);
    }).catch((error) => {
      this.errors = error.errors;
      this.submitting = false;
    });
  }
}
