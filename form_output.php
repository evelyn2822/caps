<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Profiling Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
        }

        .form-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        .form-header td, .profile-table td {
            text-align: left;
        }

        .profile-table input[type="text"], .profile-table select {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .buttons {
            text-align: center;
        }

        .buttons button {
            padding: 10px 15px;
            font-size: 16px;
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Household Profiling Form</h2>

    <!-- Step 1: Location -->
    <div class="step active" id="step1">
        <h3>Step 1: Location</h3>
        <table class="form-header">
            <tr>
                <td><strong>Province:</strong> <input type="text" placeholder="Bukidnon"></td>
                <td><strong>Municipality:</strong> <input type="text" placeholder="Manolo Fortich"></td>
                <td><strong>Barangay:</strong> <input type="text" placeholder="Insert Barangay"></td>
            </tr>
            <tr>
                <td><strong>Year Accomplished:</strong> <input type="text" placeholder="2024"></td>
                <td><strong>Profile of:</strong> <input type="text" placeholder="ALS Learners"></td>
                <td><strong>Other Notes:</strong> <input type="text" placeholder="Insert Notes"></td>
            </tr>
        </table>
    </div>

    <!-- Step 2: Background -->
    <div class="step" id="step2">
        <h3>Step 2: Background</h3>
        <table class="profile-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Household Members (Name)</th>
                    <th>Relationship to Head</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th>Disability</th>
                    <th>Ethnicity</th>
                    <th>Religion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" name="member_name_1" placeholder="Name"></td>
                    <td><input type="text" name="relationship_1" placeholder="Relationship"></td>
                    <td><input type="text" name="birthdate_1" placeholder="mm-dd-yyyy"></td>
                    <td><input type="text" name="age_1" placeholder="Age"></td>
                    <td>
                        <select name="gender_1">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                    <td>
                        <select name="civil_status_1">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widow">Widow</option>
                            <option value="Widower">Widower</option>
                            <option value="Separated">Separated</option>
                            <option value="Live-in">Live-in</option>
                        </select>
                    </td>
                    <td>
                        <select name="disability_1">
                            <option value="None">None</option>
                            <option value="Partially hearing impaired">Partially hearing impaired</option>
                            <option value="Totally hearing impaired">Totally hearing impaired</option>
                            <option value="Partially visually impaired">Partially visually impaired</option>
                            <option value="Totally visually impaired">Totally visually impaired</option>
                            <option value="Physically impaired">Physically impaired</option>
                            <option value="With special needs">With special needs</option>
                        </select>
                    </td>
                    <td><input type="text" name="ethnicity_1" placeholder="Ethnicity"></td>
                    <td><input type="text" name="religion_1" placeholder="Religion"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Step 3: Education -->
    <div class="step" id="step3">
        <h3>Step 3: Education</h3>
        <table class="profile-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Highest Grade/Year Completed</th>
                    <th>Currently Attending School?</th>
                    <th>Level Enrolled</th>
                    <th>Reasons for Not Attending</th>
                    <th>Occupation</th>
                    <th>Work</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" name="education_1" placeholder="Highest Year"></td>
                    <td>
                        <select name="attending_school_1">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td><input type="text" name="level_enrolled_1" placeholder="Level Enrolled"></td>
                    <td><input type="text" name="reasons_not_attending_1" placeholder="Reasons"></td>
                    <td>
                        <select name="occupation_1">
                            <option value="Employed">Employed</option>
                            <option value="Unemployed">Unemployed</option>
                        </select>
                    </td>
                    <td><input type="text" name="work_1" placeholder="Work"></td>
                    <td>
                        <select name="text" name="status_1">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="buttons">
        <button type="button" onclick="prevStep()" id="prevBtn" style="display:none;">Previous</button>
        <button type="button" onclick="nextStep()" id="nextBtn">Next</button>
    </div>

</div>

<script>
    let currentStep = 1;
    const totalSteps = 3;

    function showStep(step) {
        // Hide all steps
        const steps = document.querySelectorAll('.step');
        steps.forEach((step) => step.classList.remove('active'));

        // Show the current step
        document.getElementById(`step${step}`).classList.add('active');

        // Handle button visibility
        if (step === 1) {
            document.getElementById('prevBtn').style.display = 'none';
        } else {
            document.getElementById('prevBtn').style.display = 'inline';
        }

        if (step === totalSteps) {
            document.getElementById('nextBtn').innerHTML = 'Submit';
        } else {
            document.getElementById('nextBtn').innerHTML = 'Next';
        }
    }

    function nextStep() {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        } else {
            alert("Form submitted!");
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    showStep(currentStep);
</script>

</body>
</html>
