import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'component-rating',
  imports: [CommonModule],
  templateUrl: './rating.component.html',
  styleUrl: './rating.component.css'
})
export class RatingComponent {
  @Input() rating: number = 0;
  @Input() showValue: boolean = false;

  stars: ('full' | 'half' | 'empty')[] = [];

  ngOnChanges() {
    this.calculateStars();
  }

  /**
   * Calculate the stars based on the rating.
   * - Full stars are represented by 'full'.
   * - Half stars are represented by 'half'.
   * - Empty stars are represented by 'empty'.
   */
  private calculateStars() {
    this.stars = [];
    const fullStars = Math.floor(this.rating);
    const hasHalfStar = this.rating % 1 >= 0.5;

    // Add full stars
    for (let i = 0; i < fullStars; i++) {
      this.stars.push('full');
    }

    if (hasHalfStar) { // Add half star if needed
      this.stars.push('half');
    }

    // Add empty stars
    const emptyStars = 5 - this.stars.length;

    for (let i = 0; i < emptyStars; i++) {
      this.stars.push('empty');
    }
  }
}
