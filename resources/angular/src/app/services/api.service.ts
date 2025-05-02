import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { apiConfig } from '../configs/api.config';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(
    protected http: HttpClient
  ) { }

  /**
   * Make a GET request to the specified URL with the given options.
   *
   * @param url The URL to make the request to.
   * @param options The options to use for the request.
   * @returns A promise that resolves with the response data.
   */
  makeGetRequest(url: string, options = apiConfig.options): Promise<any> {
    return new Promise<any>((resolve, reject) => {
      this.http.get<any>(url, { ...options, observe: 'response' }).subscribe({
        next: (response) => {
          resolve(response);
        },
        error: (error) => {
          reject(error);
        }
      });
    })
  }

  /**
   * Make a POST request to the specified URL with the given body and options.
   *
   * @param url The URL to make the request to.
   * @param body The body to send with the request.
   * @param options The options to use for the request.
   * @returns A promise that resolves with the response data.
   */
  makePostRequest(url: string, body: any, options = apiConfig.options): Promise<any> {
    return new Promise<any>((resolve, reject) => {
      this.http.post<any>(url, body, options).subscribe({
        next: (response) => {
          resolve(response);
        },
        error: (error) => {
          reject(error);
        }
      });
    });
  }

  /**
   * Make a PUT request to the specified URL with the given body and options.
   *
   * @param url The URL to make the request to.
   * @param body The body to send with the request.
   * @param options The options to use for the request.
   * @returns A promise that resolves with the response data.
   */
  makePutRequest(url: string, body: any, options = apiConfig.options): Promise<any> {
    return new Promise<any>((resolve, reject) => {
      this.http.put<any>(url, body, options).subscribe({
        next: (response: any) => {
          resolve(response);
        },
        error: (error) => {
          reject(error);
        }
      });
    });
  }

  /**
   * Make a DELETE request to the specified URL with the given options.
   *
   * @param url The URL to make the request to.
   * @param options The options to use for the request.
   * @returns A promise that resolves with the response data.
   */
  makeDeleteRequest(url: string, options = apiConfig.options) {
    return new Promise<any>((resolve, reject) => {
      this.http.delete<any>(url, options).subscribe({
        next: (response: any) => {
          resolve(response);
        },
        error: (error) => {
          reject(error);
        }
      });
    });
  }

  /**
   * Request a file from the specified URL with the given options.
   *
   * @param url The URL to make the request to.
   * @param options The options to use for the request.
   * @returns A promise that resolves with the response data.
   */
  makeFileRequest(url: string, options = apiConfig.options) {
    return new Promise<any>((resolve, reject) => {
      this.http.get(url, { ...options, observe: 'response', responseType: 'blob' }).subscribe({
        next: (response) => {
          resolve(response.body);
        },
        error: (error) => {
          reject(error);
        }
      });
    });
  }
}
