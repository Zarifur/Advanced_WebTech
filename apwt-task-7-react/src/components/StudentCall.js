import React from "react";

const StudentCall = (props) => {

    return (
        <tr>
            <th scope="row">{props.id}</th>
            <td>{props.name}</td>
            <td>{props.email}</td>
            <td>{props.phone}</td>
        </tr>

    )

}
export default StudentCall;