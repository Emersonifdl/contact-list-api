# Contact List - Api

> A REST API which will store people and their contacts. A person can have multiple
> contacts such as phone, email or whatsapp. The API should allow to create, update, get and
> delete both the people and the contacts.

## 💻 Prerequisites

The BalancedBrackets has a requirements:

-   `docker`

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
