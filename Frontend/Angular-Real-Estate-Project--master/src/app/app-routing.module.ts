import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ContactusComponent } from "./contactus/contactus.component";
import { HomeComponent } from "./home/home.component";
import { ServicesComponent } from "./services/services.component";
import { NotFoundComponent } from './not-found/not-found.component';
import { AboutComponent } from './about/about.component';
import { FeedbackComponent } from './feedback/feedback.component';

const routes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: 'contactus', component: ContactusComponent},
  { path: '', component: HomeComponent},
  {path: 'services', component: ServicesComponent},
  {path: 'about', component: AboutComponent},
  {path: 'feedback', component: FeedbackComponent},

  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'buy', loadChildren: () => import('./buy/buy.module').then(m => m.BuyModule) },
  {path: '**', component: NotFoundComponent}

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
  declarations: [
    ContactusComponent,
    ServicesComponent,
    NotFoundComponent,
    AboutComponent,
    FeedbackComponent
  ]
})
export class AppRoutingModule { }
