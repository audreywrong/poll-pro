import React from "react";
import ReactDOM from "react-dom";
import Profile from "./Profile";
import PollTable from "./PollTable";
import "fontsource-roboto";

const Index = () => {
    return (
        <>
            <Profile />
            <PollTable />
            <div>POLLS?</div>
        </>
    );
};

ReactDOM.render(<Index />, document.getElementById("index"));
