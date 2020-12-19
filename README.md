# PHP Email Validation

Simple PHP code to validate emails server side

I wrote this code 2 years ago

It's a simple way to protect your contact form from spam emails

1. Validate Email Format (blah@abc.tld)
2. Ping Email Domain to make sure it's online
3. Validate Email Provider from the list
   + Gmail.com
   + Hotmail.com
   + Outlook.com
   + msn.com
   + Outlook.sa
   + aol.com
   + protonmail.com
   

# How to use

```php
if(isValid("user@hotmail.com")){

  echo "This is a valid email";
  
} else {

  echo "Please enter a valid email";
  
}
```

## Copyright
FarisCode
