import { Component, EventEmitter, Output } from '@angular/core';
import { GoogleTagManagerService } from 'angular-google-tag-manager';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent {
  @Output() isOnClickButton = new EventEmitter<boolean>();

  constructor(
    private gtm: GoogleTagManagerService
  ) {

  }

  onClickLinksIcon(socialMedia: string) {
    this.sendTag( {
      section: 'headerLanding',
      socialMedia
    }, 'viewSocialMedia')
  }

  scrollAboutSection() {
    this.sendTag( {
      viewAboutSection: true,
      section: 'headerLanding',
    }, 'viewAbout')
    this.isOnClickButton.emit(true);
  }

  sendTag(content: { [key: string]: any; }, event: string) {
    this.gtm.pushTag({
      event,
      content
    });
  }
}
