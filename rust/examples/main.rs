fn main() {
    let input = String::from(">language: eno");

    let document = enors::parse(&input, false);
}
