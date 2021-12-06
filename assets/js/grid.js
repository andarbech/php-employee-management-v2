// import { controller } from "./gridController.js";

const form = document.querySelector("#employee-form");
console.log(form);

// form.addEventListener("submit", () => {
//     alert("Hello! I am an alert box!!");
//     fetch("http://localhost:9000/assembler/week21/php-employee-management-v2/employee/get")
//         .then(response => response.json())
//         .then(data => {
//             console.log(data)
//         })
//         .catch(error => console.error(error))
// })

// var controller = [{
//             "id": 1,
//             "name": "Rack",
//             "lastName": "Lei",
//             "email": "jackon@network.com",
//             "gender": "man",
//             "city": "San Jone",
//             "streetAddress": "126",
//             "state": "CA",
//             "age": "24",
//             "postalCode": "394221",
//             "phoneNumber": "7383627627"
//         },
//         {
//             "id": 2,
//             "name": "John",
//             "lastName": "Doe",
//             "email": "jhondoe@foo.com",
//             "gender": "man",
//             "city": "New York",
//             "streetAddress": "89",
//             "state": "WA",
//             "age": "34",
//             "postalCode": "09889",
//             "phoneNumber": "1283645645"
//         },
//         {
//             "id": 3,
//             "name": "Leila",
//             "lastName": "Mills",
//             "email": "mills@leila.com",
//             "gender": "woman",
//             "city": "San Diego",
//             "streetAddress": "55",
//             "state": "CA",
//             "age": "29",
//             "postalCode": "098765",
//             "phoneNumber": "9983632461"
//         },
//         {
//             "id": 4,
//             "name": "Richard",
//             "lastName": "Desmond",
//             "email": "dismond@foo.com",
//             "gender": "man",
//             "age": 30,
//             "streetAddress": "90",
//             "city": "Salt lake city",
//             "state": "UT",
//             "postalCode": "457320",
//             "phoneNumber": "90876987654"
//         },
//         {
//             "id": 5,
//             "name": "Susan",
//             "lastName": "Smith",
//             "email": "susanmith@baz.com",
//             "gender": "woman",
//             "age": 28,
//             "streetAddress": "43",
//             "city": "Louisville",
//             "state": "KNT",
//             "postalCode": "445321",
//             "phoneNumber": "224355488976"
//         },
//         {
//             "id": 6,
//             "name": "Brad",
//             "lastName": "Simpson",
//             "email": "brad@foo.com",
//             "gender": "man",
//             "age": 40,
//             "streetAddress": "128",
//             "city": "Atlanta",
//             "state": "GEO",
//             "postalCode": "394221",
//             "phoneNumber": "6854634522"
//         },
//         {
//             "id": 7,
//             "name": "Neil",
//             "lastName": "Walker",
//             "email": "walkerneil@baz.com",
//             "gender": "man",
//             "age": 42,
//             "streetAddress": "1",
//             "city": "Nashville",
//             "state": "TN",
//             "postalCode": "90143",
//             "phoneNumber": "45372788192"
//         }

//     ]
// jsGrid.setDefaults("text", {
//     css: "overflow-hidden",
// });


// $("#jsGrid").jsGrid({
//     data: controller,
//     width: "100%",
//     heading: true,
//     inserting: true,
//     editing: true,
//     sorting: true,
//     paging: true,
//     autoload: true,
//     noDataContent: "Not found",
//     pageIndex: 1,
//     pageSize: 10,
//     pageButtonCount: 15,
//     pagerFormat: "Pages: {first} {prev} {pages} {next} {last}    {pageIndex} of {pageCount}",
//     pagePrevText: "Prev",
//     pageNextText: "Next",
//     pageFirstText: "First",
//     pageLastText: "Last",
//     pageNavigatorNextText: "...",
//     pageNavigatorPrevText: "...",

//     rowClick: function({ item }) {
//         window.location.href = `./employee.php?id=${item.id}`;
//     },

//     fields: [
//         { name: "id", type: "number", visible: false },
//         {
//             title: "Name",
//             name: "name",
//             type: "text",
//             width: 50,
//             align: "center",
//             validate: "required",
//         },
//         {
//             title: "Age",
//             name: "age",
//             type: "text",
//             width: 25,
//             align: "center",
//             validate: "required",
//             validate: "required",
//         },
//         {
//             title: "Email",
//             name: "email",
//             type: "text",
//             width: 50,
//             align: "center",
//             validate: "required",
//         },
//         {
//             title: "Phone",
//             name: "phoneNumber",
//             type: "text",
//             width: 50,
//             align: "center",
//             validate: "required",
//         },
//         {
//             title: "Address",
//             name: "streetAddress",
//             type: "text",
//             width: 50,
//             align: "center",
//             validate: "required",
//         },
//         {
//             title: "Postal code",
//             name: "postalCode",
//             type: "text",
//             width: 30,
//             align: "center",
//             validate: "required",
//         },
//         {
//             title: "City",
//             name: "city",
//             type: "text",
//             width: 50,
//             align: "center",
//             validate: "required",
//         },
//         {
//             title: "State",
//             name: "state",
//             type: "text",
//             width: 40,
//             align: "center",
//             validate: "required",
//         },
//         { type: "control", width: 50 },
//     ],
// });