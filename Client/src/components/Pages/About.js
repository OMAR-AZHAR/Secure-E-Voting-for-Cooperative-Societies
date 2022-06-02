import React, { Component } from "react";

//images
import img1 from "../assets/img/about/1.jpg";
import img2 from "../assets/img/about/2.jpg";
import img3 from "../assets/img/about/3.jpg";
import img4 from "../assets/img/about/4.jpg";
export default class About extends Component {
  render() {
    return (
      <div>
        <section className="page-section" id="about">
          <div className="container">
            <div className="text-center">
              <h2 className="section-heading text-uppercase">About</h2>
              <h3 className="section-subheading text-muted">
                Timeline of our Journey.
              </h3>
            </div>
            <ul className="timeline">
              <li>
                <div className="timeline-image">
                  <img
                    className="rounded-circle img-fluid"
                    src={img1}
                    alt="..."
                  />
                </div>
                <div className="timeline-panel">
                  <div className="timeline-heading">
                    <h4>April 2021</h4>
                    <h4 className="subheading">Our Project Started</h4>
                  </div>
                  <div className="timeline-body">
                    <p className="text-muted">
                      Complete Front-End and Candidate’s Module proposed as part
                      of 10% iteration goals.
                    </p>
                  </div>
                </div>
              </li>
              <li className="timeline-inverted">
                <div className="timeline-image">
                  <img
                    className="rounded-circle img-fluid"
                    src={img2}
                    alt="..."
                  />
                </div>
                <div className="timeline-panel">
                  <div className="timeline-heading">
                    <h4>June 2021</h4>
                    <h4 className="subheading">30% iteration goals</h4>
                  </div>
                  <div className="timeline-body">
                    <p className="text-muted">
                      Both Front-End and Candidate's Module Completed as part of
                      30% iteration goals.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div className="timeline-image">
                  <img
                    className="rounded-circle img-fluid"
                    src={img3}
                    alt="..."
                  />
                </div>
                <div className="timeline-panel">
                  <div className="timeline-heading">
                    <h4>July-September 2021</h4>
                    <h4 className="subheading">60% Iteration goals</h4>
                  </div>
                  <div className="timeline-body">
                    <p className="text-muted">
                      Administration Panel, Security services and Voter's Panel shall be Completed.
                    </p>
                  </div>
                </div>
              </li>
              <li className="timeline-inverted">
                <div className="timeline-image">
                  <img
                    className="rounded-circle img-fluid"
                    src={img4}
                    alt="..."
                  />
                </div>
                <div className="timeline-panel">
                  <div className="timeline-heading">
                    <h4>September-November 2021</h4>
                    <h4 className="subheading">100% iteration goals</h4>
                  </div>
                  <div className="timeline-body">
                    <p className="text-muted">
                      Remaining Ballot panel and Reporting Panel shall be
                      integrated along with Security Services. Testing,
                      Deployment and Maintenance will commence afterwards. 
                    </p>
                  </div>
                </div>
              </li>
              <li className="timeline-inverted">
                <div className="timeline-image">
                  <h4>
                    End of our development journey
                    <br />
                  
                  </h4>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </div>
    );
  }
}
