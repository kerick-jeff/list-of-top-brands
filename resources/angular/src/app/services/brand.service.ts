import { Injectable } from '@angular/core';

import { ApiService } from './api.service';
import { apiConfig } from '../configs/api.config';

@Injectable({
  providedIn: 'root'
})
export class BrandService {

  constructor(private apiService: ApiService) { }

  /**
   * Get all brands for the web.
   *
   * @returns A promise that resolves with the response data.
   */
  public indexWeb() {
    return this.apiService.makeGetRequest(`${apiConfig.url}/web/brands`);
  }

  /**
   * Get all brands for the portal.
   *
   * @returns A promise that resolves with the response data.
   */
  public indexPortal() {
    return this.apiService.makeGetRequest(`${apiConfig.url}/portal/brands`);
  }

  /**
   * Get a brand by its ID. For the portal.
   *
   * @param id The ID of the brand to fetch.
   * @returns A promise that resolves with the response data.
   */
  public fetchById(id: number) {
    return this.apiService.makeGetRequest(`${apiConfig.url}/portal/brands/${id}/fetch-by-id`);
  }

  /**
   * Get a brand by its slug. For the web.
   *
   * @param slug The slug of the brand to fetch.
   * @returns A promise that resolves with the response data.
   */
  public fetchBySlug(slug: string) {
    return this.apiService.makeGetRequest(`${apiConfig.url}/web/brands/${slug}/fetch-by-slug`);
  }

  /**
   * Store a new brand. For the portal.
   *
   * @param body The brand data to store.
   * @returns A promise that resolves with the response data.
   */
  public store(body: any) {
    return this.apiService.makePostRequest(`${apiConfig.url}/portal/brands/store`, body);
  }

  /**
   * Update a brand by its ID. For the portal.
   *
   * @param body The updated brand data.
   * @param id The ID of the brand to update.
   * @returns A promise that resolves with the response data.
   */
  public update(body: any, id: number) {
    return this.apiService.makePutRequest(`${apiConfig.url}/portal/brands/${id}/update`, body);
  }

  /**
   * Delete a brand by its ID. For the portal.
   *
   * @param id The ID of the brand to delete.
   * @returns A promise that resolves with the response data.
   */
  public delete(id: number) {
    return this.apiService.makeDeleteRequest(`${apiConfig.url}/portal/brands/${id}/delete`);
  }

  /**
   * Delete multiple brands by their IDs. For the portal.
   *
   * @param ids An array of brand IDs to delete.
   * @returns A promise that resolves with the response data.
   */
  public deleteMany(ids: number[]) {
    return this.apiService.makeDeleteRequest(`${apiConfig.url}/portal/brands/delete-many?ids=${ids}`);
  }
}
