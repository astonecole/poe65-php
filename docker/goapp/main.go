package main

import (
	"flag"
	"html/template"
	"net/http"

	"github.com/nanoninja/bulma"
)

var addr = flag.String("addr", ":3000", "Adresse du serveur")
var view = template.Must(
	template.New("").ParseFiles("./home.html"),
)

func home(w http.ResponseWriter, r *http.Request) {
	view.ExecuteTemplate(w, "main", map[string]string{
		"title": "Hello, Gophers",
		"name":  "toto",
	})
}

func main() {
	flag.Parse()

	ba := bulma.BasicAuth("Auth", http.HandlerFunc(home), bulma.User{
		"toto":  "0000",
		"chuck": "1234",
	})

	http.Handle("/", ba)
	http.ListenAndServe(*addr, nil)
}
