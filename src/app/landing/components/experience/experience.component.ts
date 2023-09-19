import { Component, HostListener } from '@angular/core';

@Component({
  selector: 'app-experience',
  templateUrl: './experience.component.html',
  styleUrls: ['./experience.component.scss']
})
export class ExperienceComponent {
  stickyClass!: string;

  @HostListener('window:scroll', [])
  onWindowScroll() {
    if (
      document.body.scrollTop > 1100 ||
      document.documentElement.scrollTop > 1100
    ) {      
      this.stickyClass = 'sticky_in';
    } else {      
      this.stickyClass = 'sticky_out';
    }
    
  }
}
