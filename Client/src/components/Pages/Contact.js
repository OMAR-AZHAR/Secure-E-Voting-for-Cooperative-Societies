import React from "react";
import Field from "../Common/Field";
import image from "../assets/img/map-image.png";

const fields = {
  sections: [
    [
      {
        name: "name",
        elementName: "input",
        type: "text",
        placeholder: "Your name here*",
        pattern: "[A-Za-z ]+",
        minlength: "3",
        titletag: "Must Consist of Letters",
        maxlength: "30",
      },
      {
        name: "email",
        elementName: "input",
        type: "email",
        placeholder: "Your email here*",
      },

      {
        name: "phone",
        elementName: "input",
        type: "tel",
        placeholder: "Your phone number here*",
      },
    ],
    [
      {
        name: "message",
        elementName: "textarea",
        type: "text",
        placeholder: "type Message here*",
      },
    ],
  ],
};

class Contact extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      name: "",
      email: "",
      phone: "",
      message: "",
    };
  }
  submitForm = (e) => {
    alert("Form Submitted");
  };

  render() {
    return (
      <section
        className="page-section"
        id="contact"
        style={{ backgroundImage: `url(${image})` }}
      >
        <div className="container">
          <div className="text-center">
            <h2 className="section-heading text-uppercase">Contact Us</h2>
            <h3 className="section-subheading">
              Feel Free to Contact and give your valuable feedback. Thanks
            </h3>
          </div>

          <form id="contactForm" onSubmit={(e) => this.submitForm(e)}>
            <div className="row align-items-stretch mb-5">
              {fields.sections.map((section, sectionIndex) => {
                return (
                  <div className="col-md-6" key={sectionIndex}>
                    {section.map((field, i) => {
                      return (
                        <Field
                          {...field}
                          key={i}
                          value={this.state[field.name]}
                          onChange={(e) =>
                            this.setState({ [field.name]: e.target.value })
                          }
                        />
                      );
                    })}
                  </div>
                );
              })}
            </div>

            <div className="d-none" id="submitSuccessMessage">
              <div className="text-center text-white mb-3">
                <div className="fw-bolder">Form submission successful!</div>
                To activate this form, sign up at
              </div>
            </div>

            <div className="d-none" id="submitErrorMessage">
              <div className="text-center text-danger mb-3">
                Error sending message!
              </div>
            </div>

            <div className="text-center">
              <button
                className="btn btn-primary btn-xl text-uppercase"
                id="submitButton"
                type="submit"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </section>
    );
  }
}
export default Contact;
