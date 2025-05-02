import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, ActivatedRoute, Router } from '@angular/router';
import { Brand } from '../../../../models/brand.model';
import { BrandService } from '../../../../services/brand.service';
import { CountryService } from '../../../../services/country.service';
import { RatingComponent } from '../../../../components/rating/rating.component';
import { ImageComponent } from '../../../../components/image/image.component';

@Component({
  selector: 'page-web-brand-detail',
  imports: [CommonModule, RouterModule, RatingComponent, ImageComponent],
  templateUrl: './detail.component.html',
  styleUrl: './detail.component.css'
})
export class DetailComponent {
  brand: Brand | null = null;
  loading: boolean = true;
  errorMessage: string|null = null;

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private brandService: BrandService,
    private countryService: CountryService
  ) {}

  /**
   * On component initialization, subscribe to the route parameters.
   * If a slug is present, load the brand data.
   * If not, navigate to the brands list page.
   */
  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
      const slug = params.get('slug');

      if (slug) {
        this.loadBrand(slug);
      } else {
        this.router.navigate(['/brands']);
      }
    });
  }

  /**
   * Load brand data based on the provided slug.
   * - Sets loading to true while fetching data.
   * - Sets loading to false after data is fetched.
   * - Handles errors by setting errorMessage and resetting brand.
   *
   * @param slug The slug of the brand to fetch.
   */
  loadBrand(slug: string): void {
    this.loading = true;
    this.errorMessage = null;

    this.brandService.fetchBySlug(slug).then((response) => {
      this.brand = response.body.data;
      this.loading = false;
    }).catch((error) => {
      this.loading = false;
      this.errorMessage = error.message;
      this.brand = null;
    });
  }

  /**
   * Get the name of the brand's country based on the country code.
   *
   * @returns The name of the brand's country or an empty string if not available.
   */
  get countryName(): string {
    if (!this.brand) return '';

    return this.countryService.getCountryNameByCode(this.brand.country);
  }
}
