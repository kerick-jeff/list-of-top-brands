import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { Brand } from '../../models/brand.model';
import { RatingComponent } from '../rating/rating.component';
import { ImageComponent } from '../image/image.component';
import { CountryService } from '../../services/country.service';

@Component({
  selector: 'component-card',
  imports: [CommonModule, RouterModule, RatingComponent, ImageComponent],
  templateUrl: './card.component.html',
  styleUrl: './card.component.css'
})
export class CardComponent {
  @Input() brand!: Brand;

  constructor(private countryService: CountryService) {}

  getCountryName(countryCode: string): string {
    return this.countryService.getCountryNameByCode(countryCode);
  }
}
