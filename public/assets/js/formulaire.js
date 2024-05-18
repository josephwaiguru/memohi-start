function toFindVehicle() {
    location.href = "/formulaire/find-vehicle"
}
function backFormulaire() {
    location.href = "/formulaire"
}
function toVehicleBrand() {
    location.href = "/formulaire/vehicle-brand"
}
function toVehicleModel() {
    location.href = "/formulaire/vehicle-model"
}
function toVehicleVersion() {
    location.href = "/formulaire/vehicle-version"
}
function toCarEnergy() {
    location.href = "/formulaire/car-energy"
}
function toRange() {
    location.href = "/formulaire/range"
}
function toSummary() {
    location.href = "/formulaire/summary"
}
function toUserInformation() {
    location.href = "/formulaire/user-information"
}

function changeBox() {
    document.getElementById("check").style.display = "none";
    document.getElementById("check-box").style.display = "flex";

}
function getCarBrand() {
    const value = document.getElementById("car-brand").value;
    $.ajax({
        url:  "/retrieve-car-brand-data",
        type: 'GET',
        data: { value: value },
        success: function (result) {
            const dropdown = document.getElementById("carlist");
            dropdown.innerHTML = ''
            result.map(function (item, index) {
                const firstdiv = document.createElement("div");

                firstdiv.textContent = item.name;
                dropdown.appendChild(firstdiv)
                firstdiv.addEventListener('click', () => {
                    const input = document.getElementById('car-brand');
                    localStorage.setItem('car_brand', item.name);
                    localStorage.setItem("car_brand_id", item.id_car_make)
                    input.value = item.name;
                    dropdown.style.display = "none"
                    input.setAttribute("readonly", true)
                    document.getElementById("carbrandpan").style.display = "none"
                    document.getElementById("cross").style.display = "flex"
                    document.getElementById("disablefooter").classList.remove("disabled-container-footer");
                    document.getElementById("disablebuton").classList.remove("disabled-button");
                    document.getElementById("disablebuton").addEventListener('click', () => {
                        location.href = "/formulaire/vehicle-model"
                    })
                });
            })
            if (result.length == 0) {
                dropdown.style.display = "none"
            } else {
                dropdown.style.display = "block"
            }
        },
        error: function (error) {
        }
    });
}
function removeValue() {
    const input = document.getElementById('car-brand');
    input.removeAttribute("readonly")
    input.value = "";
    document.getElementById("carbrandpan").style.display = "flex"
    document.getElementById("disablefooter").classList.add("disabled-container-footer");
    document.getElementById("disablebuton").classList.add("disabled-button");
    document.getElementById("cross").style.display = "none"
    localStorage.removeItem('car_brand');

}
function getCarModel() {
    const value = document.getElementById("car-model").value;
    const username = localStorage.getItem('car_brand_id')

    $.ajax({
        url: "/retrieve-car-model-data",
        type: 'GET',
        data: { value: value, value1: username },
        success: function (result) {
            const dropdownpan = document.getElementById("carmodellist");
            dropdownpan.innerHTML = ''
            result.map(function (item, index) {
                const firstdivlist = document.createElement("div");

                firstdivlist.textContent = item.name;
                dropdownpan.appendChild(firstdivlist)
                firstdivlist.addEventListener('click', () => {
                    const input = document.getElementById('car-model');
                    localStorage.setItem('car_model', item.name);
                    localStorage.setItem('car_model_id', item.id_car_model)
                    input.value = item.name;
                    dropdownpan.style.display = "none"
                    document.getElementById("carmodelpan").style.display = "none"
                    document.getElementById("cross").style.display = "flex"
                    document.getElementById("disablefooter").classList.remove("disabled-container-footer");
                    document.getElementById("disablebuton").classList.remove("disabled-button");
                    document.getElementById("disablebuton").addEventListener('click', () => {
                        location.href = "/formulaire/vehicle-version"
                    })
                });
            })
            if (result.length == 0) {
                dropdownpan.style.display = "none"
            } else {
                dropdownpan.style.display = "block"
            }
        },
        error: function (error) {
        }
    });
}
function removeModelValue() {
    const input = document.getElementById('car-model');
    input.removeAttribute("readonly")
    input.value = "";
    document.getElementById("disablefooter").classList.add("disabled-container-footer");
    document.getElementById("disablebuton").classList.add("disabled-button");
    document.getElementById("cross").style.display = "none"
    localStorage.removeItem('car_model');

}


function findCarGeneration() {
    const car_model = localStorage.getItem('car_model_id')
    const value = document.getElementById("car-generation").value;
    console.log(value);
    $.ajax({
        url: "/retrieve-car-generation-data",
        type: 'GET',
        data: { value: car_model, value1: value },
        success: function (result) {
            console.log(result)
            const dropdownpan = document.getElementById("cargenerationlist");
            dropdownpan.innerHTML = ''
            result.map(function (item, index) {
                const firstdivlist = document.createElement("div");

                firstdivlist.textContent = `${item.name} [${item.year_begin} - ${item.year_end}]`;
                dropdownpan.appendChild(firstdivlist)
                firstdivlist.addEventListener('click', () => {
                    const input = document.getElementById('car-generation');
                    localStorage.setItem('car_generation', `${item.name} [${item.year_begin} - ${item.year_end}]`);

                    input.value = `${item.name} [${item.year_begin} - ${item.year_end}]`;
                    dropdownpan.style.display = "none"
                    document.getElementById("cross").style.display = "flex"
                    document.getElementById("disablefooter").classList.remove("disabled-container-footer");
                    document.getElementById("disablebuton").classList.remove("disabled-button");
                    document.getElementById("disablebuton").addEventListener('click', () => {
                        location.href = "/formulaire/car-energy"
                    })
                });
            })
            if (result.length == 0) {
                dropdownpan.style.display = "none"
            } else {
                dropdownpan.style.display = "block"
            }
        },
        error: function (error) {
        }
    });
}

function removeGenerationValue() {
    const input = document.getElementById('car-generation');
    input.removeAttribute("readonly")
    input.value = "";
    document.getElementById("disablefooter").classList.add("disabled-container-footer");
    document.getElementById("disablebuton").classList.add("disabled-button");
    document.getElementById("cross").style.display = "none"
    localStorage.removeItem('car_generation');

}
function setEnergy(value) {
    localStorage.setItem('car_energy', value);
    const input = document.getElementById('car-energy');
    input.value = value;
    document.getElementById("cross").style.display = "flex"
    document.getElementById("disablefooter").classList.remove("disabled-container-footer");
    document.getElementById("disablebutton").classList.remove("disabled-button");
    document.getElementById("energy-pan").style.display = "none"
    document.getElementById("disablebutton").addEventListener('click', () => {
        location.href = "/formulaire/range";
    })
}
function removeEnergyValue() {
    document.getElementById("energy-pan").style.display = "flex"
    const input = document.getElementById('car-energy');
    input.removeAttribute("readonly");
    input.value = "";
    document.getElementById("disablefooter").classList.add("disabled-container-footer");
    document.getElementById("disablebutton").classList.add("disabled-button");
    document.getElementById("cross").style.display = "none"

    localStorage.removeItem('car_energy');
}
function setKMS() {
    const input = document.getElementById('car-kms');
    localStorage.setItem('car_range', input.value);
    document.getElementById("cross").style.display = "flex"
    document.getElementById("disablefooter").classList.remove("disabled-container-footer");
    document.getElementById("disablebutton").classList.remove("disabled-button");
    input.setAttribute("readonly", true)
    document.getElementById("disablebutton").addEventListener('click', () => {
        location.href = "/formulaire/summary";
    })
}
function removeKMSValue() {
    const input = document.getElementById('car-kms');
    input.removeAttribute("readonly")
    input.value = "";
    document.getElementById("disablefooter").classList.add("disabled-container-footer");
    document.getElementById("disablebutton").classList.add("disabled-button");
    document.getElementById("cross").style.display = "none"

    localStorage.removeItem('car_range');
}
let fullname;
let email;
let phonenumber;
function setFullName() {
    fullname = document.getElementById('name').value;
}
function setEmail() {
    email = document.getElementById('email').value
}
function setPhoneNumber() {
    phonenumber = document.getElementById('phonenumber').value
}
function toCongradulation() {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (fullname && email && phonenumber) {
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.")
            return false;
        }
        location.href = "/formulaire/congradulation"
        localStorage.setItem("user_fullname", fullname);
        localStorage.setItem('user_email', email)
        localStorage.setItem('user_phonenumber', phonenumber)

        return;
    } else {
        alert('Please enter correct information!')
    }
}

function submit() {
    const fullname = localStorage.getItem("user_fullname");
    const email = localStorage.getItem("user_email");
    const phonenumber = localStorage.getItem("user_phonenumber");
    const car_brand = localStorage.getItem("car_brand");
    const car_model = localStorage.getItem("car_model");
    const car_generation = localStorage.getItem("car_generation");
    const car_energy = localStorage.getItem("car_energy");
    const car_range = localStorage.getItem("car_range");
    const date = localStorage.getItem("registration_date");
    $.ajax({
        url: "/submit-data",
        type: 'GET',
        data: {
            fullname: fullname, email: email, phonenumber: phonenumber, car_brand: car_brand, car_model: car_model, car_generation: car_generation,
            car_energy: car_energy, car_range: car_range, date: date
        },
        success: function (result) {
            if (result.message == "User created") {
                localStorage.removeItem("user_fullname");
                localStorage.removeItem("user_email");
                localStorage.removeItem("user_phonenumber");
                localStorage.removeItem("car_model");
                localStorage.removeItem("car_brand");
                localStorage.removeItem("car_generation");
                localStorage.removeItem("car_energy");
                localStorage.removeItem("car_range");
                localStorage.removeItem("registration_date");
                localStorage.removeItem("car_brand_id");
                localStorage.removeItem("car_model_id");
                alert("successfully submitted");
                setTimeout(() => {
                    location.href = "/formulaire"
                }, 1500);
            }
        },
        error: function (error) {

        }
    })
}
function hideBrandList() {
    document.getElementById('carlist').style.display = "none"
}
function hideModelList() {
    document.getElementById('carmodellist').style.display = "none"
}
function hideGenerationList() {
    document.getElementById('cargenerationlist').style.display = "none"

}
