import { HttpErrorResponse, HttpEvent, HttpHandlerFn, HttpRequest } from "@angular/common/http";
import { catchError, Observable, throwError } from "rxjs";

/**
 * Interceptor to handle HTTP errors globally.
 *
 * @param request The HTTP request object.
 * @param next The next handler in the chain.
 * @returns An observable of the HTTP event.
 */
export function errorInterceptor(request: HttpRequest<any>, next: HttpHandlerFn): Observable<HttpEvent<unknown>> {
  return next(request).pipe(
    catchError((error: HttpErrorResponse) => {
      let formattedError = error.error;

      // Add the status code to the error object
      formattedError.statusCode = error.status;

      if (error.status === 0) { // define the error message if none is defined
        return throwError(
          () => new Error('An error occurred! Please try again later.')
        );
      }

      return throwError(() => formattedError);
    })
  );
}
