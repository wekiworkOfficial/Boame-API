# Knowledge Center
To fetch all with an account id add this request param to the header
```
x-account-id : (id)
```
where (id) = number

# Create, edit, delete
This actions requires that you have the following request headers

```
x-auth-token : <token after login>
x-request-action : <navigation-tag>/<action(create|edit|delete)>
x-request-platform : <platform(web|mobile)>
```