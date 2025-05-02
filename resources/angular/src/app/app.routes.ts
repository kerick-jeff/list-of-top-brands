import { Routes } from '@angular/router';

import { WebComponent as WebLayout } from './components/layout/web/web.component';
import { PortalComponent as PortalLayout } from './components/layout/portal/portal.component';

import { BrandsComponent as WebBrandListPage } from './pages/web/brands/brands.component';
import { DetailComponent as WebBrandDetailPage } from './pages/web/brands/detail/detail.component';

import { BrandsComponent as PortalBrandListPage } from './pages/portal/brands/brands.component';
import { EditComponent as PortalBrandEditPage } from './pages/portal/brands/edit/edit.component';
import { CreateComponent as PortalBrandCreatePage } from './pages/portal/brands/create/create.component';

export const routes: Routes = [
  { path: '', redirectTo: 'brands', pathMatch: 'full' },

  {
    path: 'brands',
    component: WebLayout,
    children: [
      { path: '', component: WebBrandListPage },
      { path: ':slug', component: WebBrandDetailPage },
    ]
  },

  {
    path: 'portal',
    component: PortalLayout,
    children: [
      { path: 'brands', component: PortalBrandListPage },
      { path: 'brands/create', component: PortalBrandCreatePage },
      { path: 'brands/:id/edit', component: PortalBrandEditPage },
    ]
  },

  { path: '**', redirectTo: '' },
];
