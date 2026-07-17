
<style>

  .popup-overlay.active{display: block !important;    align-content: center;justify-items: center;}
.popup-overlay {display: none;position: fixed;z-index: 9999;inset: 0;background: rgba(0,0,0,0.7);backdrop-filter: blur(5px);align-items: center;justify-content: center;}.popup-overlay.active { display: flex; }
.popup-box {background: #fff;padding: 30px;border-radius: 15px;box-shadow: 0 20px 50px rgba(0,0,0,0.3);width: 450px;max-width: 95%;position: relative;animation: slideIn 0.3s;
}
@keyframes slideIn {
from { transform: translateY(-20px); opacity: 0; }
to { transform: translateY(0); opacity: 1; }}
.close-popup {position: absolute;right: 10px;top: 10px;width: 30px;height: 30px;border: none;background: #f5f5f5;border-radius: 50%;cursor: pointer;font-size: 18px;}.close-popup:hover { background: #ff4444; color: white; }
.form-title {text-align: center;margin-bottom: 20px;color: #333;font-size: 24px;}
.form-row {margin-bottom: 15px;}
.form-row label {display: block;margin-bottom: 5px;font-weight: 600;color: #555;font-size: 14px;}.req { color: #ff4444; }
.form-row input {width: 100%;padding: 10px;border: 2px solid #e0e0e0;border-radius: 8px;font-size: 14px;transition: 0.3s;}
.form-row input:focus {outline: none;border-color: #667eea;}
.error {color: #ff4444;font-size: 12px;display: none;}.error.show { display: block; }

/* Multi-select */
.multi-select {position: relative;}
.select-display {padding: 10px;border: 2px solid #e0e0e0;border-radius: 8px;cursor: pointer;display: flex;justify-content: space-between;align-items: center;background: white;}.select-display:hover { border-color: #667eea; }.select-display.active { border-color: #667eea; }.placeholder { color: #999; background-color: #fff; font-size: 14px; }
.arrow {transition: 0.3s;color: #999;}.arrow.rotate { transform: rotate(180deg); }
.selected-tags {display: flex;flex-wrap: wrap;gap: 5px;}
.tag {background: #667eea;color: white;padding: 3px 8px;border-radius: 12px;font-size: 12px;display: inline-flex;align-items: center;gap: 5px;}
.tag span {cursor: pointer;font-weight: bold;}
.dropdown {position: absolute;top: calc(100% + 5px);left: 0;right: 0;background: white;border: 2px solid #e0e0e0;border-radius: 8px;box-shadow: 0 10px 20px rgba(0,0,0,0.1);z-index: 100;display: none;max-height: 300px;}.dropdown.active { display: block; }
.dropdown input {width: 100%;padding: 8px;border: none;border-bottom: 1px solid #e0e0e0;outline: none;font-size: 14px;}
.options {max-height: 200px;overflow-y: auto;}
.opt {padding: 10px;cursor: pointer;font-size: 14px;transition: 0.2s;}.opt:hover { background: #f5f5f5; }
.opt.selected {background: #e8eaf6;color: #667eea;font-weight: 600;}
.opt.selected::after {content: '✓';float: right;}.opt.hidden { display: none; }
.dropdown-footer {padding: 8px;border-top: 1px solid #e0e0e0;display: flex;justify-content: space-between;align-items: center;background: #f9f9f9;}
.dropdown-footer button {background: none;border: none;color: #ff4444;cursor: pointer;font-size: 13px;}
.dropdown-footer span {font-size: 13px;color: #666;}

/* Buttons */
.btn-gold, .btn-submit, .btn-cancel {padding: 10px 25px;border: none;border-radius: 25px;font-weight: 600;cursor: pointer;transition: 0.3s;}
.btn-gold {background: linear-gradient(135deg, #FFD700, #FFA500);color: #333;display: inline-flex;align-items: center;gap: 8px;text-decoration: none;}.btn-gold:hover { transform: translateY(-2px); }
.form-actions {display: flex;gap: 10px;margin-top: 20px;}
.btn-cancel {flex: 1;background: #f0f0f0;color: #666;}
.btn-submit {flex: 1;background: linear-gradient(135deg, #667eea, #764ba2);color: white;}.btn-submit:hover { transform: translateY(-2px); }

/* Success */
.success {display: none;text-align: center;padding: 40px;}
.success.show {display: block;animation: fadeIn 0.5s;}
.success i {font-size: 50px;color: #4caf50;margin-bottom: 10px;}
.success h3 {color: #333;margin: 0;}
@keyframes fadeIn {
from { opacity: 0; }
to { opacity: 1; }}

/* Responsive */
@media (max-width: 500px) {.popup-box { padding: 20px; }.form-actions { flex-direction: column; }}
</style>

<!-- TRIGGER BUTTON (demo only, replace with your nav/button as needed) -->
<button id="openQuote" style="display:none;">Apply for a Course</button>
<!-- <h6>hiiiiiiiiiiiiiiiiiii</h6> -->
<!-- Popup HTML -->
<div class="popup-overlay" id="popupOverlay">
  <div class="popup-box">
    <button class="close-popup" id="closePopup">&times;</button>
    <h2 class="form-title">Apply for a Course</h2>

    @if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif
    <!-- <form id="applyForm" action="courseMail.php" method="POST" autocomplete="off"> -->
      <form id="applyForm" action="{{ route('apply.course') }}" method="POST" autocomplete="off">
  @csrf
  <div class="form-row">
    <label>Name <span class="req">*</span></label>
    <input type="text" id="name" name="name" required>
    <span class="error" id="nameErr"></span>
  </div>

  <div class="form-row">
    <label>Mobile <span class="req">*</span></label>
    <input type="tel" id="number" name="number" pattern="[0-9]{10}" required>
    <span class="error" id="numErr"></span>
  </div>

  <div class="form-row">
    <label>Course(s) <span class="req">*</span></label>
    <div class="multi-select" id="multiSelect">
      <div class="select-display" id="selectDisplay">
        <span class="placeholder">Select courses...</span>
        <i class="fas fa-chevron-down arrow"></i>
      </div>
      <div class="dropdown" id="dropdown">
        <input type="text" id="search" placeholder="Search...">
        <div class="options">
          <div class="opt" data-val="Web Development">Web Development</div>
          <div class="opt" data-val="Mobile App Development">Mobile App Development</div>
          <div class="opt" data-val="Flutter Development">Flutter Development</div>
          <div class="opt" data-val="UI/UX Designing">UI/UX Designing</div>
          <div class="opt" data-val="PHP Development">PHP Development</div>
          <div class="opt" data-val="Software Testing">Software Testing</div>
        </div>
        <div class="dropdown-footer">
          <button type="button" id="clearAll">Clear</button>
          <span id="count">0 selected</span>
        </div>
      </div>
    </div>
    <span class="error" id="courseErr"></span>
  </div>

  <!-- Hidden input for courses -->
  <input type="hidden" id="multiSelectInput" name="multiSelect">

  <div class="form-row">
    <label>Email <span class="req">*</span></label>
    <input type="email" id="email" name="email" required>
    <span class="error" id="emailErr"></span>
  </div>
  
  <a href="{{url('terms')}}"  style="font-size: small;" class="text-black">Terms & Condition <span style="font-weight: 800; color: #666;">|</span></a>
  <a href="{{url('privacy')}}" style="font-size: small;"  class="text-black">Privacy Policy</a>

  <div class="form-actions">
    <button type="button" class="btn-cancel" id="cancelBtn">Cancel</button>
    <button type="submit" class="btn-submit">Submit</button>
  </div>
</form>

    <div class="success" id="success">
      <i class="fas fa-check-circle"></i>
      <h3>Submitted!</h3>
    </div>
  </div>
</div>

<!-- FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
/* ... Copy your CSS here ... (unchanged) ... */
</style>
<script>
document.addEventListener("click", function (e) {
  if (e.target && e.target.id === "openQuote") {
    const popup = document.getElementById("popupOverlay");
    if (popup) {
      popup.classList.add("active");
    }
  }

  if (e.target && (e.target.id === "closePopup" || e.target.id === "cancelBtn")) {
    const popup = document.getElementById("popupOverlay");
    if (popup) popup.classList.remove("active");
  }
});
</script>

<script>
// ------ POPUP/FORM/MULTISELECT LOGIC -----



(function(){
  // Grab elements
  const popup = document.getElementById('popupOverlay');
  const applyForm = document.getElementById('applyForm');
  const multiSelect = document.getElementById('multiSelect');
  const selectDisplay = document.getElementById('selectDisplay');
  const dropdown = document.getElementById('dropdown');
  const search = document.getElementById('search');
  const success = document.getElementById('success');
  const cancelBtn = document.getElementById('cancelBtn');
  const closeBtn = document.getElementById('closePopup');
  let selected = [];

  
  // Popup open (use your trigger, demo uses id=openQuote)
  if(document.getElementById('openQuote')) {
    document.getElementById('openQuote').onclick = () =>  popup.classList.add('active');
  }
   

  closeBtn.onclick = closePopup;
  cancelBtn.onclick = closePopup;
  popup.onclick = (e) => { if (e.target === popup) closePopup(); };

  function closePopup() {
    popup.classList.remove('active');
    applyForm.reset();
    selected = [];
    updateSelectDisplay();
    success.classList.remove('show');
    applyForm.style.display = 'block';
    document.querySelectorAll('.error').forEach(err => { err.textContent = ""; err.classList.remove('show');});
    document.querySelectorAll('.opt').forEach(o => o.classList.remove('selected'));
  }

  // Multi-select logic
  selectDisplay.onclick = function(e) {
    e.stopPropagation();
    dropdown.classList.toggle('active');
    selectDisplay.classList.toggle('active');
    if(selectDisplay.querySelector('.arrow')) selectDisplay.querySelector('.arrow').classList.toggle('rotate');
    search.focus();
  };
  function closeDropdown() {
    dropdown.classList.remove('active');
    selectDisplay.classList.remove('active');
    if(selectDisplay.querySelector('.arrow')) selectDisplay.querySelector('.arrow').classList.remove('rotate');
    search.value = '';
    filterOptions();
  }
  // Option selection
  dropdown.querySelectorAll('.opt').forEach(opt => {
    opt.onclick = function(e) {
      e.stopPropagation();
      const val = this.dataset.val;
      const idx = selected.indexOf(val);
      if (idx === -1) {
        selected.push(val);
        this.classList.add('selected');
      } else {
        selected.splice(idx, 1);
        this.classList.remove('selected');
      }
      updateSelectDisplay();
    };
  });
  function updateSelectDisplay() {
    const placeholder = '<span class="placeholder">Select courses...</span><i class="fas fa-chevron-down arrow"></i>';
    if (selected.length === 0) {
      selectDisplay.innerHTML = placeholder;
    } else {
      const tags = selected.map(s => `<span class="tag">${s} <span class="remove-tag" data-val="${s}">&times;</span></span>`).join('');
      selectDisplay.innerHTML = `<div class="selected-tags">${tags}</div><i class="fas fa-chevron-down arrow"></i>`;
    }
    document.getElementById('count').textContent = `${selected.length} selected`;
    // Remove tag click
    selectDisplay.querySelectorAll('.remove-tag').forEach(el => {
      el.onclick = function(ev) {
        ev.stopPropagation();
        const val = this.dataset.val;
        const idx = selected.indexOf(val);
        if (idx !== -1) {
          selected.splice(idx, 1);
          dropdown.querySelector(`.opt[data-val="${val}"]`).classList.remove('selected');
          updateSelectDisplay();
        }
      }
    });
    // Restore arrow rotation when opened
    if(selectDisplay.querySelector('.arrow') && dropdown.classList.contains('active')) {
      selectDisplay.querySelector('.arrow').classList.add('rotate');
    }
  }
  // Clear all
  document.getElementById('clearAll').onclick = function(e) {
    e.preventDefault();
    selected = [];
    dropdown.querySelectorAll('.opt').forEach(o => o.classList.remove('selected'));
    updateSelectDisplay();
  };
  // Search filter
  search.oninput = filterOptions;
  function filterOptions() {
    const term = search.value.toLowerCase();
    dropdown.querySelectorAll('.opt').forEach(opt => {
      opt.classList.toggle('hidden', !opt.textContent.toLowerCase().includes(term));
    });
  }
  // Outside click closes dropdown
  document.addEventListener('click', function(e) {
    if (!multiSelect.contains(e.target)) closeDropdown();
  });

  // Form Validation & Submit
//   applyForm.onsubmit = function(e) {
//     e.preventDefault();
//     document.querySelectorAll('.error').forEach(err => { err.textContent = ""; err.classList.remove('show');});
//     let valid = true;
//     if (document.getElementById('name').value.trim().length < 2) {
//       document.getElementById('nameErr').textContent = 'Invalid name';
//       document.getElementById('nameErr').classList.add('show');
//       valid = false;
//     }
//     if (!/^[0-9]{10}$/.test(document.getElementById('number').value.trim())) {
//       document.getElementById('numErr').textContent = 'Invalid mobile number';
//       document.getElementById('numErr').classList.add('show');
//       valid = false;
//     }
//     if (selected.length === 0) {
//       document.getElementById('courseErr').textContent = 'Please select at least one course';
//       document.getElementById('courseErr').classList.add('show');
//       valid = false;
//     }
//     if (!/\S+@\S+\.\S+/.test(document.getElementById('email').value.trim())) {
//       document.getElementById('emailErr').textContent = 'Invalid email';
//       document.getElementById('emailErr').classList.add('show');
//       valid = false;
//     }
//     if (valid) {
//       applyForm.style.display = 'none';
//       success.classList.add('show');
//       setTimeout(closePopup, 2000);
//     }
//     hiddenInput.value = selected.join(', '); 

//   };


applyForm.onsubmit = function(e) {
  // reset errors
  document.querySelectorAll('.error').forEach(err => {
    err.textContent = "";
    err.classList.remove('show');
  });

  let valid = true;

  if (document.getElementById('name').value.trim().length < 2) {
    document.getElementById('nameErr').textContent = 'Invalid name';
    document.getElementById('nameErr').classList.add('show');
    valid = false;
  }
  if (!/^[0-9]{10}$/.test(document.getElementById('number').value.trim())) {
    document.getElementById('numErr').textContent = 'Invalid mobile number';
    document.getElementById('numErr').classList.add('show');
    valid = false;
  }
  if (selected.length === 0) {
    document.getElementById('courseErr').textContent = 'Please select at least one course';
    document.getElementById('courseErr').classList.add('show');
    valid = false;
  }
  if (!/\S+@\S+\.\S+/.test(document.getElementById('email').value.trim())) {
    document.getElementById('emailErr').textContent = 'Invalid email';
    document.getElementById('emailErr').classList.add('show');
    valid = false;
  }
    document.getElementById('multiSelectInput').value = selected.join(', ');

  // always set hidden input
  hiddenInput.value = selected.join(', ');

  // ❌ If invalid, stop submit
  if (!valid) {
    e.preventDefault();
  }
  // ✅ If valid, DO NOT preventDefault -> form goes to courseMail.php
};


})();
</script>
