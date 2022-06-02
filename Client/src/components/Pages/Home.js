import React, { Component } from "react";
import Header from "../Common/Header";
import image from "../assets/img/header-bg.jpg";

import About from "./About";
import Team from "../Common/Team";
// Re-usable Comp
import Services from "../Common/Services";
import Contact from "./Contact";
import Footer from "../Common/Footer";

class Home extends Component {
  render() {
    return (
      <div>
        <Header
          title="Welcome to"
          subtitle="Secure Voting For Cooperative Societies"
          buttonText="Get-Started"
          // link="/Signup" // to signup/login page
          showButton={true}
          image={image}
        />

        <Services />

        <About />
        <Team />
        <Contact />

        <Footer name="SEVCS 2022" />
      </div>
    );
  }
}
export default Home;
