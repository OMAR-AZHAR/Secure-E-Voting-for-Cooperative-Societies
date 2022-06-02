import React from "react";

class SingleService extends React.Component {
  render() {
    // Apply props for icons as well...replace  fa-shopping-cart with {this.props.icon}
    return (
      <div className="col-md-4">
        <span className="fa-stack fa-4x">
          <i className="fas fa-circle fa-stack-2x text-primary"></i>
          <i className={`fas ${this.props.icon} fa-stack-1x fa-inverse`}></i>
        </span>
        <h4 className="my-3">{this.props.title}</h4>
        <p className="text-muted">{this.props.description}</p>
      </div>
    );
  }
}
export default SingleService;
