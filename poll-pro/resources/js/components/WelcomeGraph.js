import * as React from "react";
// import ReactDOM from "react-dom";
import { RadialChart } from "react-vis";

const WelcomeGraph = () => {
    const myData = [
        { angle: 7, label: "Poll 1" },
        { angle: 5, label: "Poll 2" },
        { angle: 1, label: "Poll 3" },
    ];

    return (
        <>
            <div style={{ height: 400, width: "100%" }}>
                <RadialChart
                    className="radial-chart"
                    showLabels={true}
                    data={myData}
                    width={300}
                    height={300}
                />
            </div>
        </>
    );
};

export default WelcomeGraph;
