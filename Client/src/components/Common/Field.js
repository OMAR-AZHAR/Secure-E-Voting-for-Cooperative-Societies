import React, { Component } from "react";

class Field extends Component {
  render() {
    return (
      <div className="form-group">
        {this.props.elementName === "input" ? (
          <label>
            {this.props.label}
            <input
              className="form-control form-width"
              id={this.props.name}
              type={this.props.type}
              placeholder={this.props.placeholder}
              required="required"
              data-validation-required-message="Please enter your name."
              name={this.props.name}
              onChange={this.props.onChange}
              onBlur={this.props.onBlur}
              pattern={this.props.pattern}
              minLength={this.props.minlength}
              title={this.props.titletag}
              maxLength={this.props.maxlength}
            />
          </label>
        ) : (
          <textarea
            style={{ height: "242px" }}
            className="form-control"
            id={this.props.id}
            placeholder={this.props.placeholder}
            required="required"
            //  data-validation-required-message="Please enter a message."
            name={this.props.name}
            onChange={this.props.onChange}
            onBlur={this.props.onBlur}
            minLength="30"
            maxLength="150"
            pattern="[A-Za-z ]+"
            title="Message can only contain letters"
          />
        )}
        <p className="help-block text-danger">
          {this.props.touched && this.props.errors && (
            <div>{this.props.errors}</div>
          )}
        </p>
      </div>
    );
  }
}

export default Field;
