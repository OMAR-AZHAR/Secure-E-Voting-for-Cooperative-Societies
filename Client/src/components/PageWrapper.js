import React, { Component } from "react";
import { Link } from "react-router-dom";
import AnchorLink from "react-anchor-link-smooth-scroll";
import moon from "./assets/img/darkmode/moon.png";
import logo from "./assets/img/logo.jpg";
import LoginModal from "./Pages/LoginModal";
import C from "./Pages/Clock";



class PageWrapper extends Component {
  constructor(props) {
    super(props);
    this.state = { showNav: false };
    this.toggleNav = this.toggleNav.bind(this);
  }

  toggleNav() {
    this.setState({
      showNav: !this.state.showNav,
    });
  }

  render() {
    const { showNav } = this.state;

    return (
      
      <div className={this.state.active && "dark-theme"}>
        <nav
          className="navbar navbar-expand-lg navbar-dark fixed-top " // navber-shrink
          id="mainNav"
        >
       

          <div className="container"> 
            <AnchorLink className="navbar-brand" href="#top-1">
              <img
                src={logo}
                style={{
                  width: "10rem",
                  height: "3.5rem",
                  borderRadius: "1rem",
                }}
                alt="..."
              />
            </AnchorLink>
            <button
              className="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="true"
              aria-label="Toggle navigation"
              onClick={this.toggleNav}
            >
              Menu
              <i className="fas fa-bars ms-1"></i>
            </button>
            <div
              className={(showNav ? "show" : "") + " collapse navbar-collapse"}
              id="navbarResponsive"
            >
             <C/>
              <ul className="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li className="nav-item">
                
                  <AnchorLink className="nav-link" href="#top-1">
                    Home
                  </AnchorLink>
                </li>
                <li className="nav-item">
                  <AnchorLink className="nav-link" href="#services">
                    Services
                  </AnchorLink>
                </li>

                <li className="nav-item">
                  <AnchorLink className="nav-link" href="#about">
                    About
                  </AnchorLink>
                </li>
                <li className="nav-item">
                  <AnchorLink className="nav-link" href="#team">
                    Team
                  </AnchorLink>
                </li>
                <li className="nav-item">
                  <AnchorLink className="nav-link" href="#contact">
                    Contact
                  </AnchorLink>
                </li>
                {/* <li className="nav-item">
                  <Link className="nav-link" to="">
                    Blog
                  </Link>
                </li> */}
                <li className="nav-item" id="log">
                  <LoginModal />
                </li>
                <img
                  src={moon}
                  alt="darkmode"
                  id="darkicon"
                  onClick={() => this.setState({ active: !this.state.active })}
                />
              </ul>
            </div>
          </div>
        </nav>
        {this.props.children /* Home.js is its child */}{" "}
      </div>
    );
  }
}
export default PageWrapper;
