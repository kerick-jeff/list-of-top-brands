import { HttpHeaders } from '@angular/common/http';

export const apiConfig = {
  url: 'http://localhost:8000/api/v1',
  options: {
    headers: new HttpHeaders({
      "Content-Type": "application/json",
      "Accept": "application/json",
      "CF-IPCountry": "CM" // Simulate Cloudflare IP Country header
    })
  }
};
