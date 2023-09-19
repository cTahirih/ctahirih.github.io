import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { LandingModule } from './landing/landing.module';
import { GoogleTagManagerModule } from 'angular-google-tag-manager';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    LandingModule,
    GoogleTagManagerModule.forRoot({
      id: 'GTM-MLBWQXW7'
    })
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
