import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'component-layout-web',
  imports: [CommonModule, RouterModule],
  templateUrl: './web.component.html',
  styleUrl: './web.component.css'
})
export class WebComponent {
  get currentYear(): number {
    return new Date().getFullYear();
  }
}
