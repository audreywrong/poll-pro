import * as React from "react";
import { DataGrid } from "@material-ui/data-grid";

//Will get data from Polls Table in mySQL with axio requests

const columns = [
    { field: "id", headerName: "ID", width: 70 },
    { field: "firstName", headerName: "Question", width: 300 },
    { field: "lastName", headerName: "Created", width: 130 },
    {
        field: "age",
        headerName: "Number of Options",
        type: "number",
        width: 200,
    },
];

const rows = [
    { id: 1, lastName: "Snow", firstName: "Jon", age: 35 },
    { id: 2, lastName: "Lannister", firstName: "Cersei", age: 42 },
    { id: 3, lastName: "Lannister", firstName: "Jaime", age: 45 },
    { id: 4, lastName: "Stark", firstName: "Arya", age: 16 },
    { id: 5, lastName: "Targaryen", firstName: "Daenerys", age: null },
    { id: 6, lastName: "Melisandre", firstName: null, age: 150 },
    { id: 7, lastName: "Clifford", firstName: "Ferrara", age: 44 },
    { id: 8, lastName: "Frances", firstName: "Rossini", age: 36 },
    { id: 9, lastName: "Roxie", firstName: "Harvey", age: 65 },
];

const PollTable = () => {
    return (
        <div style={{ height: 400, width: "100%" }}>
            <DataGrid rows={rows} columns={columns} pageSize={5} />
        </div>
    );
};

export default PollTable;
