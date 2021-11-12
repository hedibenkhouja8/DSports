import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { BuyRoutingModule } from './buy-routing.module';
import { BuyComponent } from './buy.component';


@NgModule({
  declarations: [
    BuyComponent
  ],
  imports: [
    CommonModule,
    BuyRoutingModule
  ]
})
export class BuyModule { }
