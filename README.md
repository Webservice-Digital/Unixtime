# Unixtime API

The Unixtime API is a simple web service that provides the current Unix timestamp along with requesting domain, developer details, and metadata.

## Table of Contents

- [Introduction](#introduction)
- [Programming Language and UNIX](#programming-language-and-unix)
- [UNIX Operating System](#unix-operating-system)
- [init.php File](#initphp-file)
- [API Response](#api-response)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Unixtime API is a lightweight and straightforward web service that offers a quick way to retrieve the current Unix timestamp and associated information. It's designed for developers seeking a reliable source of Unix time for their applications.

## Programming Language and UNIX

The Unixtime API is implemented using the PHP programming language. PHP is a versatile scripting language commonly used for web development. It's known for its ease of use and compatibility with various web servers and platforms.

UNIX, on the other hand, is a family of multitasking, multiuser computer operating systems that share a common set of commands and features. It has a rich history dating back to the 1960s and has been a foundational environment for software development, server management, and various computing tasks.

## UNIX Operating System

UNIX is present on a wide range of hardware platforms, including servers, workstations, mainframes, and embedded systems. It has been a cornerstone of the computing world, influencing the development of modern operating systems.

## init.php File

The `init.php` file is the main script of the Unixtime API. It handles the request, calculates the current Unix timestamp, retrieves the requesting domain, and compiles metadata. This file is responsible for generating the JSON response that the API sends to the client.

## API Response

When a request is made to the Unixtime API using the `init.php` file, the response will be a JSON object containing the following information:

- `success`: A boolean indicating the success of the request.
- `data`: An object containing the following:
  - `unixtime`: The current Unix timestamp.
  - `domain`: The domain from which the request originated.
  - `metadata`: An object containing additional metadata:
    - `github_repo`: The GitHub repository URL.
    - `company`: Information about the company behind the project.

## Usage

To use the Unixtime API, simply send an HTTP request to the `init.php` file on your server. The API will respond with the current Unix timestamp, domain information, and metadata.

Example API Response:

```json
{
    "success": true,
    "data": {
        "unixtime": 1692134494,
        "domain": "example.com",
        "metadata": {
            "github_repo": "https://github.com/Webservice-Digital/Unixtime/",
            "company": "netcore.digital"
        }
    }
}
```

## Contributing
Contributions are welcome!
If you find a bug or have suggestions for improvements, please feel free to open an issue or submit a pull request.

## License
This project is licensed under the GNU License - see the LICENSE file for details.
