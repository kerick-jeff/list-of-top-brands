import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { Brand } from '../../../models/brand.model';
import { BrandService } from '../../../services/brand.service';
import { CountryService } from '../../../services/country.service';
import { CardComponent } from '../../../components/card/card.component';
import { Country } from '../../../models/country.model';

@Component({
  selector: 'page-web-brand-list',
  imports: [CommonModule, RouterModule, CardComponent],
  templateUrl: './brands.component.html',
  styleUrl: './brands.component.css'
})
export class BrandsComponent {
  brands: Brand[] = [];
  loading: boolean = true;
  userCountry: string | null = null;
  countries: Country[] = [];
  errorMessage: string|null = null;

  constructor(
    private brandService: BrandService,
    private countryService: CountryService
  ) {}

  ngOnInit(): void {
    this.loadBrands();
  }

  /**
   * Load brands from the API
   * - Sets loading to true while fetching data.
   * - Sets loading to false after data is fetched.
   * - Handles errors by setting errorMessage and resetting brands.
   */
  loadBrands(): void {
    this.loading = true;
    this.errorMessage = null;

    this.brandService.indexWeb().then((response) => {
      this.brands = response.body.data.data;
      this.userCountry = response.headers.headers.get('country').toString();
      this.loading = false;
    }).catch((error) => {
      this.loading = false;
      this.errorMessage = error.message;
      this.brands = [];
    });
  }

  /**
   * Get the name of the user's country based on the country code.
   *
   * @returns The name of the user's country or an empty string if not available.
   */
  get countryName(): string {
    if (!this.userCountry) return '';
    return this.countryService.getCountryNameByCode(this.userCountry);
  }
}
