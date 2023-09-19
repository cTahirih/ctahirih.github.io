import { Component, ElementRef, HostBinding, HostListener, ViewChild } from '@angular/core';

@Component({
  selector: 'app-landing',
  templateUrl: './landing.component.html',
  styleUrls: ['./landing.component.scss']
})
export class LandingComponent {
  stickyClass!: string;

  @HostBinding("class")
  protected readonly classes = "landing-container";

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


  @ViewChild('aboutSection') private aboutSection!: ElementRef;
  scrollExperienceSection() {
    // this.my_point_3.nativeElement.scrollIntoView({behavior: "smooth"});
    this.aboutSection?.nativeElement.scrollIntoView();
  }

}
