import React, { Component } from "react";
import { Link } from "react-router-dom";
class TeamMembers extends Component {
  render() {
    return (
      <div className="col-lg-4">
        <div className="team-member">
          <img
            className="mx-auto rounded-circle"
            src={this.props.image}
            alt="..."
          />
          <h4>{this.props.name}</h4>
          <p className="text-muted">{this.props.position}</p>
          <Link
            rel="noreferrer"
            className="btn btn-dark btn-social mx-2"
            to={{
              pathname: "#",
            }}
            target="_blank"
          >
            <i className="fab fa-twitter"></i>
          </Link>
          <Link
            rel="noreferrer"
            className="btn btn-dark btn-social mx-2"
            to={{
              pathname: "#",
            }}
            target="_blank"
          >
            <i className="fab fa-facebook-f"></i>
          </Link>
          <Link
            rel="noreferrer"
            className="btn btn-dark btn-social mx-2"
            to={{
              pathname: "https://linkedin.com/in/omar-a-malik/",
            }}
            target="_blank"
          >
            <i className="fab fa-linkedin-in"></i>
          </Link>
        </div>
      </div>
    );
  }
}
export default TeamMembers;
