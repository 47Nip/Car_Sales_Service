 function showInquiryForm(carModel) {
    document.getElementById('car-model').innerText = carModel;
    document.getElementById('car-model-input').value = carModel;
    document.getElementById('inquiry-form').style.display = 'block';
}

function closeInquiryForm() {
    document.getElementById('inquiry-form').style.display = 'none';
}

