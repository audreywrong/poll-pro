import { colors, withTheme } from "@material-ui/core";
import * as React from "react";
// import ReactDOM from "react-dom";
import { RadialChart } from "react-vis";

const WelcomeGraph = () => {
    const myData = [
        { angle: 5, label: "Poll 3" },
        { angle: 4, label: "Poll 5" },
        { angle: 2, label: "Poll 6" },
    ];

    return (
        <>
            <div style={{ height: 300, width: "100%" }}>
                <RadialChart
                    className="radial-chart"
                    showLabels={true}
                    labelsRadiusMultiplier={0.9}
                    data={myData}
                    width={300}
                    height={300}
                />
            </div>
        </>
    );
};

export default WelcomeGraph;
