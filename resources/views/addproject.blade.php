<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Project Form</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f3f4f6;
      padding: 30px;
    }

    .form-container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
      color: #444;
    }

    .form-group input[type="text"],
    .form-group textarea,
    .form-group input[type="file"] {
      width: 100%;
      padding: 10px;
      font-size: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .skills-input-container {
      display: flex;
      gap: 10px;
      margin-bottom: 10px;
    }

    .skills-input-container input {
      flex: 1;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .skill-tag {
      background-color: #dbeafe;
      color: #1e40af;
      padding: 6px 10px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      font-size: 14px;
    }

    .skill-tag span {
      margin-left: 8px;
      cursor: pointer;
      font-weight: bold;
      color: #ef4444;
    }

    .form-group button {
      background-color: #4f46e5;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      font-weight: bold;
    }

    .form-group button:hover {
      background-color: #4338ca;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Add New Project</h2>
  <form id="projectForm">
    <div class="form-group">
      <label for="projectName">Project Name</label>
      <input type="text" id="projectName" name="projectName" required>
    </div>

    <div class="form-group">
      <label for="projectDesc">Description</label>
      <textarea id="projectDesc" name="projectDesc" required></textarea>
    </div>

    <div class="form-group">
      <label for="projectImage">Project Image</label>
      <input type="file" id="projectImage" name="projectImage" accept="image/*">
    </div>

    <div class="form-group">
      <label for="skillInput">Skills</label>
      <div class="skills-input-container">
        <input type="text" id="skillInput" placeholder="Enter a skill">
        <button type="button" onclick="addSkill()">Add</button>
      </div>
      <div class="skills-list" id="skillsList"></div>
    </div>

    <div class="form-group">
      <button type="submit">Save Project</button>
    </div>
  </form>
</div>
</body>
</html>
