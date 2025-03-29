/// <reference types="cypress" />
Cypress.on('uncaught:exception', (err, runnable) => {
  // returning false here prevents Cypress from
  // failing the test
  return false
})
describe('empty spec', () => {
  beforeEach(() => {
    cy.visit('http://127.0.0.1:8000/sign-in');
    cy.get('[data-validate="Valid email is: "] > .input100').type('hilmi@gmail.com');

    cy.get('#password').type('hilmi123');
    cy.get('.login100-form-btn').click();

  });

  it('Customer Home Page', () => {
    cy.visit('http://127.0.0.1:8000/')

    //See this text
    cy.get(':nth-child(1) > .nav-link').should("have.text", "Home");
    cy.get(':nth-child(2) > .nav-link').should("have.text", "Shop");
    cy.get(':nth-child(3) > .nav-link').should("have.text", "Wishlist");
    cy.get(':nth-child(4) > .nav-link').should("have.text", "Cart");
    cy.get(':nth-child(5) > .nav-link').should("have.text", "Checkout");
    cy.get(':nth-child(6) > .nav-link').should("have.text", "Order");

    cy.get('.text-white').should("have.text", "Hilmi");
    cy.get('[href="http://127.0.0.1:8000/user/profile"]').click();


    })


    it('Profile Page', () => {
      cy.visit('http://127.0.0.1:8000/user/profile')

      //See this text
      cy.get('.card-header > h4').should("have.text", "Update Profile");
      cy.get(':nth-child(3) > label').should("have.text", "Name");
      cy.get(':nth-child(4) > label').should("have.text", "Phone");
      cy.get(':nth-child(5) > label').should("have.text", "Email");
      cy.get(':nth-child(6) > label').should("have.text", "Address");
      cy.get(':nth-child(7) > label').should("have.text", "Postal Code");
      cy.get(':nth-child(8) > label').should("have.text", "Province");
      cy.get(':nth-child(9) > label').should("have.text", "Country");


      // change data
      cy.get('#name').clear().type('Hilmi Prada');
      cy.get('#myForm > .btn').click({ force: true });

      // check change
      cy.get('.text-white').should("have.text", "Hilmi Prada");




    })

})