import * as React from "react";
import { RadialChart } from "react-vis";

const WelcomeGraph = () => {
    const slices = GPOLLS.map((poll) => ({
        ...poll,
        angle: poll.votes_count,
        label: `Poll ID: ${poll.id}`,
    })).filter((poll) => poll.angle);

    return (
        <>
            <div style={{ height: 300, width: "100%" }}>
                <RadialChart
                    className="radial-chart"
                    showLabels={true}
                    labelsRadiusMultiplier={0.9}
                    data={slices}
                    width={300}
                    height={300}
                />
            </div>
        </>
    );
};

export default WelcomeGraph;
