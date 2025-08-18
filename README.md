# pds-app

🍎 A supportive application for people with **IBS (Irritable Bowel Syndrome)** to easily look up foods they can and cannot eat, and to discover recipes with smart ingredient alternatives.  
💌 Includes a mailing list for new recipes, suggested alternatives, and updates.

---

## Table of Contents

- [Overview](#overview)  
- [Features](#features)  
- [Requirements](#requirements)  
- [Installation](#installation)  
- [Configuration](#configuration)  
- [License](#license)

---

## Overview

Living with IBS can make food choices stressful. **pds-app** helps users make safe, confident decisions about what to eat:

- Quickly check if a food is safe, should be limited, or avoided.  
- Browse recipes tailored to IBS-friendly diets.  
- Get **ingredient alternatives** when a recipe contains a trigger food.  
- Subscribe to a **mailing list** for updates, suggested recipes, and helpful tips.  

The app is designed to be simple, mobile-friendly, and empowering for everyday use.

---

## Features

✅ Searchable database of foods with IBS-safety indicators  
✅ Recipe suggestions with automatic substitutions for restricted foods  
✅ Personalized profiles for saving safe/unsafe foods  
✅ Mailing list subscription for recipes and updates  
✅ Multi-language support (via logged in user settings)  
✅ Responsive design for mobile and desktop use  

---

## Requirements

- PHP ≥ 8.1  
- Composer  
- Node.js ≥ 14 and npm / yarn  
- Database (MySQL, PostgreSQL, or SQLite)

---

## Installation

Clone the repository and install dependencies:

```bash
git clone https://github.com/AlbertVDS/pds-app.git
cd pds-app
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
```
---

## Configuration

---

Update your .env file with the correct settings:

GEMINI_API_KEY=<gemini api key>

CHUNK_STRING_LENGTH=2500
GEMINI_TRANSLATION_PROMPT='Provide the following information as list: Translate the following list to #country_code# repsond with json and no text formatting. keep the keys the same, don\t add new ones.'
GEMINI_MODEL_NAME=gemini-2.5-flash
GEMINI_API_SLEEP=10
GEMINI_REQUEST_TIMEOUT=60000

RECIPE_API_BASE_URL=https://www.themealdb.com/api/json/v1/1/

---

## Lisence

---

Distributed under the MIT License.
See the full text in the LICENSE file.

---