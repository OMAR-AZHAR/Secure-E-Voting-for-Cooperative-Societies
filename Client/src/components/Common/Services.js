import React, { Component } from "react";
import SingleService from "./SingleService";
const services = [
  {
    title: "Accessibility",
    description:
      "Our Website provides Universal Access to disabled persons. Similarly, the Design is simple, flexible and responsive which makes it easy to access. Moreover, with dark theme, it puts little to no stain on eyes as well",
    icon: "fa-universal-access",
  },
  {
    title: "Responsive Design",
    description:
      "Responsiveness makes it easy to open in Mobiles, laptops, or PCs efficiently. Moreover, the combination of React and Bootstrap makes it even more efficient. The website is mobile friendly and is optimized for Larger displays.",
    icon: "fa-laptop",
  },
  {
    title: "Security",
    description:
      "Security Services to Ensure Total Protection against fraud and Corruption. It is protected by CIA TRIAD - with focus on XSS, CSRF, and other preventions to ensure that your credentials and privacy remains confidential.",
    icon: "fa-lock",
    
  },
  {
    title: "Seperate Web-backend",
    description:
      "Alongwith Security services, our backend is completely independent of the main page ensuring quick and rapid responses.",
    icon: "fa-layer-group",
    
  },
  {
    title: "Ballot Hashing",
    description:
      "In Compliance with security standards; we have deployed a hashing algorithm to protect the access of out ballot. Hence, avoiding hacking",
    icon: "fa-key",
    
  },
  {
    title: "24/7 Support",
    description:
      "We are readily available 24/7 for our customers and clients. Hence, offering our services and support to conduct transparent elections in a efficiently",
    icon: "fa-clock",
    
  },

];
class Services extends Component {
  render() {
    return (
      <section className="page-section" id="services">
        <div className="container">
          <div className="text-center">
            <h2 className="section-heading text-uppercase">Services</h2>
            <h3 className="section-subheading text-muted">
              Some Highlights from System Specifications
            </h3>
          </div>
          <div className="row text-center">
            {services.map((service, index) => {
              return <SingleService key={index} {...service} />; // ...is a spread operator
            })}
          </div>
        </div>
      </section>
    );
  }
}
export default Services;
