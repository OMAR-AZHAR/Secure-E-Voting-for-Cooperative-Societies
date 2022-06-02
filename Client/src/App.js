import React from "react";
import PageWrapper from "./components/PageWrapper";

import { BrowserRouter as Router, Route } from "react-router-dom";
// Pages
//import Home from "./components/Pages/Home"; Rendered in Preloader under pageWrapper
import About from "./components/Pages/About";
import Contact from "./components/Pages/Contact";
import Services from "./components/Common/Services";
import Team from "./components/Common/Team";
// Pre-loading Spinner import
import Preloader1 from "./components/Preloader1";

const App = () => {
  return (
    <div>
      <Router>
        <Route
          exact={true}
          path="/"
          render={(props) => (
            <Preloader1>
              <PageWrapper />
            </Preloader1>
          )}
        />

        <Route
          path="/services"
          render={(props) => (
            <PageWrapper>
              <Services />
            </PageWrapper>
          )}
        />

        <Route
          path="/about"
          render={(props) => (
            <PageWrapper>
              <About />
            </PageWrapper>
          )}
        />

        <Route
          path="/team"
          render={(props) => (
            <PageWrapper>
              <Team />
            </PageWrapper>
          )}
        />

        <Route
          path="/contact"
          render={(props) => (
            <PageWrapper>
              <Contact />
            </PageWrapper>
          )}
        />
      </Router>
    </div>
  );
};

export default App;
