import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'component-image',
  imports: [CommonModule],
  templateUrl: './image.component.html',
  styleUrl: './image.component.css'
})
export class ImageComponent {
  @Input() brandName: string = '';
  @Input() imageSrc: string | null = null;
  @Input() size: 'sm' | 'md' | 'lg' | 'auto' = 'md';
  @Input() hasBorder: boolean = true;
  @Input() hasShadow: boolean = true;

  get initials(): string {
    if (!this.brandName) return '';

    // Get first 2 characters of the brand name
    return this.brandName.substring(0, 2).toUpperCase();
  }
}
