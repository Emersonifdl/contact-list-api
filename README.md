# BalancedBrackets

> This algorithm takes a string of brackets as the input, and determines if the order of the
> brackets is valid. A bracket is considered to be any one of the following characters: (, ),
> {, }, [, or ].

## 💻 Prerequisites

The BalancedBrackets has a requirements:

-   `PHP >= 7`

## 🚀 Installation

Clone the repository:

```
git clone git@github.com:Emersonifdl/contact-list-api.git
```

Switch to the repo folder and copy the example env file and make the required configuration changes in the .env file:

```
cp .env.example .env
```

Install the dependencies

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

You can also create a bash alias for sail (Optional)

```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

## ☕ Get Started

Switch to the repo folder and run the following code in terminal:

```
./vendor/bin/sail up
```

Once the Bash alias has been configured, you may execute

```
sail up -d
```

To learning more about Laravel Sail, review its [complete documentation](https://laravel.com/docs/9.x/sail).
