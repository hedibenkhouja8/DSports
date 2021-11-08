import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ContactusComponent } from "./contactus/contactus.component";
import { HomeComponent } from "./home/home.component";
import { ServicesComponent } from "./services/services.component";

const routes: Routes = [
  { path: 'contactus', component: ContactusComponent},
  { path: '', component: HomeComponent},
  {path: 'services', component: ServicesComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
