import { Observable, of } from 'rxjs';
import { delay } from 'rxjs/operators';
import { Injectable } from '@angular/core';

import { Country, countries } from '../models/country.model';

@Injectable({
  providedIn: 'root'
})
export class CountryService {
  private countries: Country[] = countries;

  constructor() { }

  /**
   * Get all countries.
   *
   * @returns An observable of the countries array.
   */
  getCountries(): Observable<Country[]> {
    return of(this.countries).pipe(delay(300));
  }

  /**
   * Get a country by its code.
   *
   * @param code The country's ISO-2 code.
   * @returns An observable of the country object or undefined if not found.
   */
  getCountryByCode(code: string): Observable<Country | undefined> {
    const country = this.countries.find(c => c.code === code);
    return of(country).pipe(delay(200));
  }

  /**
   * Get a country's name.
   *
   * @param code The country's ISO-2 name.
   * @returns An observable of the country object or undefined if not found.
   */
  getCountryNameByCode(code: string): string {
    const country = this.countries.find(c => c.code === code);
    return country ? country.name : code;
  }
}
