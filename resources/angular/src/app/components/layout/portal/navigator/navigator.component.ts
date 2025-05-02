import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'component-layout-portal-navigator',
  imports: [CommonModule, RouterModule],
  templateUrl: './navigator.component.html',
  styleUrl: './navigator.component.css'
})
export class NavigatorComponent {
  @Input() title: string = '';
  @Input() subtitle: string = '';
}
