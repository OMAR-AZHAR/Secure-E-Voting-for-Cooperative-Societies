import React, { Component } from "react";
import { Link } from "react-router-dom";

class Header extends Component {
  render() {
    return (
      <header
        id="top-1"
        className="masthead"
        style={{
          backgroundImage: `url(${this.props.image})`,
          backgroundAttachment: "fixed",
        }}
      >
        <div className="container">
          <div className="masthead-subheading">{this.props.title}</div>
          <div className="masthead-heading text-uppercase">
            {this.props.subtitle}
           
         
          </div> 
          {this.props.showButton && (
            <Link
              className="btn btn-primary btn-xl text-uppercase"
              rel="noreferrer"
              to={{
                pathname:
                  "http://localhost/SEVCS_II/Server/votesystem/admin/Signupdemo.php",
              }}
              target="_parent"
            >
              {this.props.buttonText}
            </Link>
          )}
          
        </div>
      </header>
    );
  }
}
export default Header;
