import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { Brand } from '../../../models/brand.model';
import { BrandService } from '../../../services/brand.service';
import { CountryService } from '../../../services/country.service';
import { NavigatorComponent } from '../../../components/layout/portal/navigator/navigator.component';
import { RatingComponent } from '../../../components/rating/rating.component';
import { ImageComponent } from '../../../components/image/image.component';
import { Country } from '../../../models/country.model';

@Component({
  selector: 'page-portal-brand-list',
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    NavigatorComponent,
    RatingComponent,
    ImageComponent
  ],
  templateUrl: './brands.component.html',
  styleUrl: './brands.component.css'
})
export class BrandsComponent {
  brands: Brand[] = [];
  filteredBrands: Brand[] = [];
  countries: Country[] = [];
  selectedBrands: Brand[] = [];
  searchQuery: string = '';
  selectedCountry: string = '';
  loading: boolean = true;
  errorMessage: string|null = null;

  constructor(
    private brandService: BrandService,
    private countryService: CountryService
  ) {}

  ngOnInit(): void {
    this.loadBrands();
    this.loadCountries();
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

    this.brandService.indexPortal().then((response) => {
      this.brands = response.body;
      this.filteredBrands = response.body.data.data;
      this.loading = false;
    }).catch((error) => {
      this.loading = false;
      this.errorMessage = error.message;
    });
  }


  loadCountries(): void {
    this.countryService.getCountries().subscribe(countries => {
      this.countries = countries;
    });
  }

  onSearch(): void {
    this.applyFilters();
  }

  onFilterByCountry(): void {
    this.applyFilters();
  }

  /**
   * Apply filters to the brands list
   * - Filters by search query and selected country.
   * - Updates the filtered brands list.
   * - Updates the selected brands list based on the filtered brands.
   */
  applyFilters(): void {
    let filtered = this.brands;

    if (this.searchQuery) { // Apply search filter
      const query = this.searchQuery.toLowerCase();

      filtered = filtered.filter(brand =>
        brand.name.toLowerCase().includes(query) ||
        brand.caption.toLowerCase().includes(query) ||
        brand.description.toLowerCase().includes(query)
      );
    }

    if (this.selectedCountry) { // Apply country filter
      filtered = filtered.filter(brand => brand.country === this.selectedCountry);
    }

    this.filteredBrands = filtered;

    this.selectedBrands = this.selectedBrands.filter(brand =>
      this.filteredBrands.some(b => b.id === brand.id)
    );
  }

  /**
   * Toggle the selection of a brand
   * - If the brand is already selected, remove it from the selected brands list.
   * - If the brand is not selected, add it to the selected brands list.
   *
   * @param brand The brand to toggle.
   */
  toggleSelect(brand: Brand): void {
    if (this.isSelected(brand)) {
      this.selectedBrands = this.selectedBrands.filter(b => b.id !== brand.id);
    } else {
      this.selectedBrands.push(brand);
    }
  }

  isSelected(brand: Brand): boolean {
    return this.selectedBrands.some(b => b.id === brand.id);
  }

  /**
   * Toggle the selection of all brands
   * - If all brands are selected, clear the selected brands list.
   * - If not all brands are selected, select all filtered brands.
   */
  toggleSelectAll(): void {
    if (this.areAllSelected()) {
      this.selectedBrands = [];
    } else {
      this.selectedBrands = [...this.filteredBrands];
    }
  }

  areAllSelected(): boolean {
    return this.filteredBrands.length > 0 && this.selectedBrands.length === this.filteredBrands.length;
  }

  /**
   * Delete a brand
   * - Confirms with the user before deletion.
   * - Calls the brand service to delete the brand.
   * - Reloads the brands list after deletion.
   * - Removes the deleted brand from the selected brands list.
   *
   * @param brand The brand to delete.
   */
  onDeleteBrand(brand: Brand): void {
    if (confirm(`Are you sure you want to delete ${brand.name}?`)) {
      this.brandService.delete(brand.id).then(() => {
        this.loadBrands();
        this.selectedBrands = this.selectedBrands.filter(b => b.id !== brand.id);
      }).catch((error) => {
        alert('Failed to delete brand. Please try again.');
      });
    }
  }

  /**
   * Delete selected brands
   * - Confirms with the user before deletion.
   * - Calls the brand service to delete the selected brands.
   * - Reloads the brands list after deletion.
   * - Clears the selected brands list.
   */
  onDeleteSelected(): void {
    if (this.selectedBrands.length === 0) return;

    const count = this.selectedBrands.length;
    if (confirm(`Are you sure you want to delete ${count} selected brand${count > 1 ? 's' : ''}?`)) {
      const ids = this.selectedBrands.map(brand => brand.id);

      this.brandService.deleteMany(ids).then(() => {
        this.loadBrands();
        this.selectedBrands = [];
      }).catch((error) => {
        alert('Failed to delete selected brands. Please try again.');
      });
    }
  }

  /**
   * Get the name of the country based on the country code.
   *
   * @param countryCode The country code to look up.
   * @returns The name of the country or an empty string if not available.
   */
  getCountryName(countryCode: string): string {
    return this.countryService.getCountryNameByCode(countryCode);
  }
}
