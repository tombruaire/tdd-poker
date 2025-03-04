describe("POKER", () => {
    it("Test - Quinte Flush", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('9Pique');
        cy.get('select#main_carte2').select('8Pique');
        cy.get('select#main_carte3').select('7Pique');
        cy.get('select#main_carte4').select('6Pique');
        cy.get('select#main_carte5').select('5Pique');
        cy.get('button#btnJouer').click();
    })
  })