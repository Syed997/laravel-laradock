# Robi Shareholder Management System (RSMS)

**Robi Shareholder Management System** or **RSMS** in short is a stakeholder management system designed to oversee and control the stakeholders associated with **<a href="https://www.robi.com.bd/en">Robi Axiata</a>**.

## Features

-------------------------

- Stakeholders have the capability to generate reports, access investment details, configure and calculate dividend data, maintain records of dividend warrants, and generate tax certificates, with the option to circulate them via email.
- Enables dynamic Stakeholder Profiling and fetching all the data on-the-fly for a completely adaptable profile.
## Getting Started

-------------------------

Follow the instructions below to set up and run **RSMS** on your machine.

### Prerequisites

- **Python Version 3.7 or above.** [Download Python](https://www.python.org/downloads/)

- **PyCharm IDE (Community Edition or Professional).** [Download PyCharm IDE](https://www.jetbrains.com/pycharm/)
  
- **PostgreSQL 12 or above.** [Get PostgresSQL](https://www.postgresql.org/)


## Setting the stage

-------------------------

1. Clone the **RSMS** repository.


2. Open the RSMS repository on your **PyCharm IDE**.


3. You will be prompted to create a Virtual Environment on your project directory. **Accept** and a new **.venv** directory containing the Virtual Environment will be generated.


-------------------------

### PostgreSQL Setup for Ubuntu

- Open your **terminal** and enter the following command to install PostgreSQL on your machine:
    
    ```bash
    sudo apt install postgresql
    ```
- To start the **Postgres** server, use the following command:

    ```bash
    sudo -i -u postgres
    ```

- To enter the terminal-based front-end to PostgreSQL:
    ```bash
    psql
    ```
- To create your own role, database and change ownership of the newly database:

    ```bash
    CREATE DATABASE your_database_name;
    ```
    ```bash
    CREATE USER your_username WITH PASSWORD 'your_password';
    ```
    ```bash
    GRANT ALL PRIVILEGES ON DATABASE your_database_name TO your_username;
    ```
    ```bash
    ALTER DATABASE your_database_name OWNER TO your_username;
    ```
    **Reminder:** Input each command individually, entering them sequentially.

### PostgreSQL Setup for Windows

- [Download PostgreSQL](https://www.postgresql.org/download/windows/) and install it.

- Add **PostgreSQL**’s bin directory (by default: **C:\Program Files\PostgreSQL\<version>\bin**) to the PATH.

- Create a **postgres** user with a password using the pg admin gui:

- Open **pgAdmin**.

  - Double-click the server to create a connection.

  - Select Object ‣ Create ‣ Login/Group Role.

  - Enter the **username** in the Role Name field (e.g.: odoo).

  - Open the **Definition** tab, enter a **password** (e.g.: odoo), and click **Save**.

  - Open the **Privileges** tab and switch **Can login?** to **Yes** and **Create database?** to **Yes**.

-------------------------
4. Make a copy of **rsms_sample.conf** as **rsms.conf** in the same directory.

    **Note 1:** Use the same **database name**, **database user/role and password** you used during **PostgreSQL Setup** on your local machine.

    **Note 2:** Look at the image below to get a reference on how to set up your own **config file**.


![rsms.conf sample](https://i.ibb.co/vhSrjq3/Screenshot-from-2023-12-14-11-05-28.png)


#### Fig 1: Config File Example

5. Select **Edit Configuration** for the config file
    - add your_preferred_name
    - add the **odoo.bin** file path on the **script** field
    - set the working directory to the project directory
    - add the following line on the **Script Parameter** field:

    ```bash
    -c rsms.conf -u shareholder_management
    ```
-------------------------

### Installing Dependencies on Ubuntu
- Open **terminal** on the IDE, navigate to the rsms directory if you are not already in it, and execute the following commands:
    ```bash
    sudo apt install python3-pip libldap2-dev libpq-dev libsasl2-dev
    ```
   and then,
    ```bash
    pip3 install -r requirements.txt
    ```
   **Note:** Both commands need to be executed separately one after the other.

